FROM mcr.microsoft.com/dotnet/sdk:7.0
WORKDIR /app
COPY ./bin/Debug/net7.0/publish/*.* /app/
COPY ./Program.cs /app/
EXPOSE 8085
ENTRYPOINT [ "dotnet","dotnet.dll" ]

