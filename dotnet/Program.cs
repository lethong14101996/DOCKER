var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

app.MapGet("/", () => "Dot net app running on swarm "+ System.Net.Dns.GetHostName());

app.Run();
